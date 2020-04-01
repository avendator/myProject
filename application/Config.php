<?php

namespace application;

/**
 * Class Config
 */
class Config {

	/**
	 * @var array
	 */
	private $config = [];

	/**
	 * @var null|Config
	 */
	private static $instance = null;

	private function __construct() {}

	/**
	 * @return Config
	 */
	public static function getInstance() {

		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * @param array $data
	 * @return $this
	 */
	public function load(array $data) {

		$this->data = $data;
		return $this;
	}

	/**
	 * @param string $key
	 * @param mixed $default
	 * @param mixed
	 */
	public function get($key, $defaultValue = null) {

		return isset($this->config[$key]) ? $this->config[$key] : $default;
	}
}

