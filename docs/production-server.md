# Production Server Configuration

Due to a limitation with Bluehost and the inability to add a domain to a new account that already exists on another Bluehost account, we've had to modify the standard WHM/cPanel configuration in order to get the vghfoundation.ca domain working correctly on their new account.

1. The Domain (vghfoundation.ca) has been added manually as a new zone record via WHM.

2. A custom vhost entry was added to the proper cPanel recommendated path:
`/etc/apache2/conf.d/includes/post_virtualhost_global.conf`

The file contains the following configuration block.

```
<VirtualHost 198.1.127.194:80>
  ServerName vghfoundation.ca
  ServerAlias www.vghfoundation.ca
  DocumentRoot /home/worldcy3/public_html
  ServerAdmin webmaster@vghfoundation.ca
  UseCanonicalName Off
  CustomLog /etc/apache2/logs/domlogs/vghfoundation.ca combined
  <IfModule log_config_module>
    <IfModule logio_module>
      CustomLog /etc/apache2/logs/domlogs/vghfoundation.ca-bytes_log "%{%s}t %I .\n%{%s}t %O ."
    </IfModule>
  </IfModule>
  ## User worldcy3 # Needed for Cpanel::ApacheConf
  <IfModule userdir_module>
    <IfModule !mpm_itk.c>
      <IfModule !ruid2_module>
        UserDir disabled
        UserDir enabled worldcy3
      </IfModule>
     </IfModule>
  </IfModule>

  # Enable backwards compatible Server Side Include expression parser for Apache versions >= 2.4.
  # To selectively use the newer Apache 2.4 expression parser, disable SSILegacyExprParser in
  # the user's .htaccess file.  For more information, please read:
  #    http://httpd.apache.org/docs/2.4/mod/mod_include.html#ssilegacyexprparser
  <IfModule include_module>
    <Directory "/home/worldcy3/public_html">
      SSILegacyExprParser On
    </Directory>
  </IfModule>

  <IfModule suphp_module>
    suPHP_UserGroup worldcy3 worldcy3
  </IfModule>
  <IfModule suexec_module>
    <IfModule !mod_ruid2.c>
      SuexecUserGroup worldcy3 worldcy3
    </IfModule>
  </IfModule>
  <IfModule ruid2_module>
    RMode config
    RUidGid worldcy3 worldcy3
  </IfModule>
  <IfModule mpm_itk.c>
    # For more information on MPM ITK, please read:
    #   http://mpm-itk.sesse.net/
    AssignUserID worldcy3 worldcy3
  </IfModule>

  <IfModule alias_module>
    ScriptAlias /cgi-bin/ /home/worldcy3/public_html/cgi-bin/
  </IfModule>

  # To customize this VirtualHost use an include file at the following location
  # Include "/etc/apache2/conf.d/userdata/std/2_4/worldcy3/vghfoundation.ca/*.conf"
</VirtualHost>
```