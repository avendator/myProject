<?php

namespace application;

/**
 * Class Console
 * @package application
 */
class Console {

	const SUCCESS = 'SUCCESS';
	const FAILURE = 'FAILURE';
	const WARNING = 'WARNING';
	const NOTE = 'NOTE';

	/**
	 * @param string $message
	 * @param string $status
	 */
	public static function printLine($message, $status = '') {

		switch ($status) {
			case self::SUCCESS:
				$color = "<<<green>>>";
				break;
			case self::FAILURE:
				$color = "<<<red>>>";
				break;
			case self::WARNING:
				$color = "<<<yellow>>>";
				break;
			case self::NOTE:
				$color = "<<<blue>>>";
			default:
				$color = "<<<blue>>>";
		}
		echo "{$color}{$message}" . "<br>";
	}
}
