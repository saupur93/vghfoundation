<?php if($count == 1): ?>
<section class="panel extra-padded-landing two-column-landing overview-panel<?php echo ' panel-'.$count; ?>">
<?php else: ?>
<section class="panel padded two-column-landing<?php echo ' panel-'.$count; ?>">
<?php endif; $n=0; ?>
  <div class="container">
    <div class="inner-wrap">
    <?php if( have_rows('columns') ): ?>
      <?php while( have_rows('columns') ): the_row();
        $n++;
        $column_title = get_sub_field('column_title');
        $column_body = get_sub_field('column_body');
          if ($n ==2) {
               if ($campaign_goal){
               $campaign_goal = get_sub_field('campaign_goal');
             }
                if ($raised_total){
                $raised_total = get_the_field('raised_total');
                $need_total = ($campaign_total - $raised_total);
                $percent_raised = ($raised_total/$campaign_total) * 100;
                $percent_raised_round = ceil($percent_raised);
                $percent_need_round = (100 - $percent_raised_round);
              }
      }


      ?>
      <?php if($column_title): ?>
      <h3><?php print $column_title; ?></h3>
      <?php endif; ?>
      <div class="col-half-landing">

        <?php
         if ($n==2) {
           print $column_body. "<p>Campaign Goal:". $campaign_goal ."</p>";

         } else {
           print $column_body;
         }
         ?>

        <?php if ($n==2) { ?>
          <style>

        	@-webkit-keyframes fill {
        	  0% {
        	     max-width: 0;
        	  }

        	  100% {
        	    max-width: 100%;
        	  }
        	}

        	@keyframes fill {
        	  0% {
        	     max-width: 0;
        	  }

        	  100% {
        	    max-width: 100%;
        	  }
        	}

        .thermometers-wrap {
            position: relative;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            left:0;
            right:0;
            margin-top:50px;

        }

        .thermometer-progress {
            position: relative;
            width: 500px;
            max-width: 100%;
            height: 50px;
            border-radius: 60px;
            margin: auto auto 30px;
            padding: 4px;
            border: 4px solid #bdbdc0;

        }


        .progress-title {
           margin-top:3px;
            height: 80%;
            width : 50%;

            border-radius: 70px 0 0 70px;
            line-height: 25px;
            background: #92c841;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            font-size: 15px;

        }

        .remaining-title {
          margin-top: -14px;
           display: block;
            height: 80%;
            width: 50%;


            line-height: 0px;

            text-transform: uppercase;
            float: right;
            text-align: center;
            font-size: 15px;

        }

        .progress-bars {
            position: absolute;
            top: 42px;
            width: 25%;
            height: 20px;
        }

        .progress-bars.one {
            left: 0;
            border-left: 2px solid #bdbdc0;
        }

        .progress-bars.two {
            left: 25%;
            border-left: 2px solid #bdbdc0;
        }

        .progress-bars.three {
            left: 50%;
            border-left: 2px solid #bdbdc0;
        }

        .progress-bars.four {
            left: 75%;
            border-left: 2px solid #bdbdc0;
            border-right: 2px solid #bdbdc0;
            text-align: right;
        }

        .progress-bars::before {
            position: absolute;
            content: '';
            width: 25%;
            height: 50%;
            bottom: 0;
            left: 25%;
            border-style: solid;
            border-width: 0 2px 0 2px;
        }

        .progress-bars::after {
            position: absolute;
            content: '';
            width: 25%;
            height: 50%;
            bottom: 0;
            right: 0;
            border-style: solid;
            border-width: 0 0 0 1px;
        }

        .progress-bars.one::before,
        .progress-bars.one::after,
        .progress-bars.two::before,
        .progress-bars.two::after {
            border-color: #bdbdc0;
        }

        .progress-bars.three::before {
            border-left-color: #bdbdc0;
            border-right-color: #bdbdc0;
        }

        .progress-bars.three::after {
            border-color: #bdbdc0;
        }

        .progress-bars.four::before,
        .progress-bars.four::after {
            border-color: #bdbdc0;
        }

        .progress-bars.four::after {
            border-right: 0;
        }

        .fill {
            -webkit-animation-name: fill;
            animation-name: fill;
            -webkit-animation-duration: 5s;
            animation-duration: 5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        	</style>


          <div class="thermometers-wrap">
            <div class="thermometer-progress">
              <div class="progress-title fill">$10,000 DONATED</div>
              <div class="remaining-title">Need $10,000</div>
              <div class="progress-bars one"></div>
              <div class="progress-bars two"></div>
              <div class="progress-bars three"></div>
              <div class="progress-bars four"></div>
            </div>
          </div>
    <?php
  }
     ?>


      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
