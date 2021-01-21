<?php
/**
*
* @copyright (c) 2021 Mike-on-Tour and (Christian-Esch.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\social\core;

/**
* Social Icons Configuration container class
*/
class chris1278_config implements \ArrayAccess, \IteratorAggregate, \Countable
{
	/**
	* The chris1278_config data
	*
	* @var	array(string => string)
	*/
	protected $chris1278_config;

	/**
	* Creates a chris1278_config container with a default set of values
	*
	* @param	array(string => string)	$chris1278_config	The chris1278_config data.
	*/
	public function __construct(array $chris1278_config)
	{
		$this->chris1278_config = $chris1278_config;
	}

	/**
	* Retrieves an ArrayIterator over the chris1278_config values.
	*
	* @return	\ArrayIterator	An iterator over all chris1278_config data
	*/
	public function getIterator()
	{
		return new \ArrayIterator($this->chris1278_config);
	}

	/**
	* Checks if the specified chris1278_config value exists.
	*
	* @param 	string	$key	The chris1278_config option's name.
	*
	* @return	bool 		Whether the chris1278_config option exists.
	*/
	public function offsetExists($key)
	{
		return isset($this->chris1278_config[$key]);
	}

	/**
	* Retrieves a chris1278_config value.
	*
	* @params 	string	$key	The chris1278_config option's name.
	*		string	The configuration value
	*/
	public function offsetGet($key)
	{
		return (isset($this->chris1278_config[$key])) ? $this->chris1278_config[$key] : '';
	}

	/**
	* Temporarily overwrites the value of a chris1278_config variable.
	*
	* The chris1278_config change will not persist. It will be lost after the request.
	*
	* @params	string	$key		The chris1278_config option's name.
	*		string	$value	The temporary value.
	*/
	public function offsetSet($key, $value)
	{
		$this->chris1278_config[$key] = $value;
	}

	/**
	* Called when deleting a chris1278_config value directly, triggers an error.
	*
	* @param	string	$key	The chris1278_config option's name.
	*/
	public function offsetUnset($key)
	{
		trigger_error('Chris1278_config values have to be deleted explicitly with the \chris1278\social\core\chris1278_config::delete($key) method.', E_USER_ERROR);
	}

	/**
	* Retrieves the number of chris1278_config options currently set.
	*
	* @return	int	Number of chris1278_config options
	*/
	public function count()
	{
		return count($this->chris1278_config);
	}

	/**
	* Removes a chris1278_config option
	*
	* @params 	string	$key			The chris1278_config option's name
	*		bool 		$use_cache 	Whether this variable should be cached or if it changes too frequently to be efficiently cached
	*/
	public function delete($key, $use_cache = true)
	{
		unset($this->chris1278_config[$key]);
	}

	/**
	* Sets a chris1278_config option's value
	*
	* @params	string	$key			The chris1278_config option's name
	*		string	$value 		New chris1278_config value
	*		bool		$use_cache	Whether this variable should be cached or if it changes too frequently to be efficiently cached.
	*/
	public function set($key, $value, $use_cache = true)
	{
		$this->chris1278_config[$key] = $value;
	}

	/**
	* Sets a chris1278_config option's value only if the old_value matches the current chris1278_config value or the chris1278_config value does not exist yet.
	*
	* @params	string	$key			The chris1278_config option's name
	*		string	$old_value		Current chris1278_config value
	*		string	$new_value	New chris1278_config value
	*		bool		$use_cache	Whether this variable should be cached or if it changes too frequently to be efficiently cached.
	*
	* @return	bool              True if the value was changed, false otherwise.
	*/
	public function set_atomic($key, $old_value, $new_value, $use_cache = true)
	{
		if (!isset($this->chris1278_config[$key]) || $this->chris1278_config[$key] == $old_value)
		{
			$this->chris1278_config[$key] = $new_value;
			return true;
		}
		return false;
	}

	/**
	* Increments an integer chris1278_config value.
	*
	* @params	string	$key       The chris1278_config option's name
	*		int		$increment Amount to increment by
	*		bool		$use_cache Whether this variable should be cached or if it changes too frequently to be efficiently cached.
	*/
	function increment($key, $increment, $use_cache = true)
	{
		if (!isset($this->chris1278_config[$key]))
		{
			$this->chris1278_config[$key] = 0;
		}

		$this->chris1278_config[$key] += $increment;
	}
}
