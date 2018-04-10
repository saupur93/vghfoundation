<?php

if (!defined('ABSPATH')) exit;
if (!class_exists('BVFWConfig')) :
class BVFWConfig {
	public $bvmain;
	public static $requests_table = 'fw_requests';

	function __construct($bvmain) {
		$this->bvmain = $bvmain;
	}

	#mode
	const DISABLED = 1;
	const AUDIT    = 2;
	const PROTECT  = 3;

	public function setMode($mode) {
		if (!$mode) {
			$this->bvmain->info->deleteOption('bvfwmode');
		} else {
			$this->bvmain->info->updateOption('bvfwmode', intval($mode));
		}
	}

	public function setWhitelistedIPs($ips) {
		if (!$ips) {
			$this->bvmain->info->deleteOption('bvfwwhitelistedips');
		} else {
			$this->bvmain->info->updateOption('bvfwwhitelistedips', $ips);
		}
	}

	public function setBlacklistedIPs($ips) {
		if (!$ips) {
			$this->bvmain->info->deleteOption('bvfwblacklistedips');
		} else {
			$this->bvmain->info->updateOption('bvfwblacklistedips', $ips);
		}
	}

	public function setRulesMode($mode) {
		if (!$mode) {
			$this->bvmain->info->deleteOption('bvfwrulesmode');
		} else {
			$this->bvmain->info->updateOption('bvfwrulesmode', intval($mode));
		}
	}

	public function setDisabledRules($rules) {
		if (!$rules) {
			$this->bvmain->info->deleteOption('bvfwdisabledrules');
		} else {
			$this->bvmain->info->updateOption('bvfwdisabledrules', $rules);
		}
	}

	public function getMode() {
		$mode = $this->bvmain->info->getOption('bvfwmode');
		return intval($mode ? $mode : BVFWConfig::DISABLED);
	}

	public function getRulesMode() {
		$mode = $this->bvmain->info->getOption('bvfwrulesmode');
		return intval($mode ? $mode : BVFWConfig::DISABLED);
	}

	public function getDisabledRules() {
		$rules = $this->bvmain->info->getOption('bvfwdisabledrules');
		return ($rules ? $rules : array());
	}

	public function getBlacklistedIPs() {
		$ips = $this->bvmain->info->getOption('bvfwblacklistedips');
		return ($ips ? $ips : array());
	}

	public function getWhitelistedIPs() {
		$ips = $this->bvmain->info->getOption('bvfwwhitelistedips');
		return ($ips ? $ips : array());
	}

	public function clear() {
		$this->setMode(false);
		$this->setRulesMode(false);
		$this->setBlacklistedIPs(false);
		$this->setWhitelistedIPs(false);
		$this->setDisabledRules(false);
		$this->bvmain->db->dropBVTable(BVFWConfig::$requests_table);
		$this->bvmain->info->deleteOption('bvptplug');
		return true;
	}
}
endif;