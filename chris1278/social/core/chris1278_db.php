<?php
/**
*
* @copyright (c) 2021 Mike-on-Tour and (Christian-Esch.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace chris1278\social\core;

/**
* Configuration container class
*/
class chris1278_db extends \chris1278\social\core\chris1278_config
{
	/**
	* Cache instance
	* @var \phpbb\cache\driver\driver_interface
	*/
	protected $cache;

	/**
	* Database connection
	* @var \phpbb\db\driver\driver_interface
	*/
	protected $db;

	/**
	* Name of the database table used for chris1278_config (chris1278)
	* @var string
	*/
	protected $table;

	/**
	* Creates a chris1278_config container with a default set of values
	*
	* @params	\phpbb\db\driver\driver_interface		$db		Database connection
	*		\phpbb\cache\driver\driver_interface	$cache	Cache instance
	*		string						$table	Configuration table name
	*/
	public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\cache\driver\driver_interface $cache, $table)
	{
		$this->db = $db;
		$this->cache = $cache;
		$this->table = $table;

		if (($chris1278_config = $cache->get('chris1278_config')) !== false)
		{
			$sql = 'SELECT chris1278_name, chris1278_value
				FROM ' . $this->table . '
				WHERE is_dynamic = 1';
			$result = $this->db->sql_query($sql);

			while ($row = $this->db->sql_fetchrow($result))
			{
				$chris1278_config[$row['chris1278_name']] = $row['chris1278_value'];
			}
			$this->db->sql_freeresult($result);
		}
		else
		{
			$chris1278_config = $chris1278_cached_config = array();

			$sql = 'SELECT chris1278_name, chris1278_value, is_dynamic
				FROM ' . $this->table;
			$result = $this->db->sql_query($sql);

			while ($row = $this->db->sql_fetchrow($result))
			{
				if (!$row['is_dynamic'])
				{
					$chris1278_cached_config[$row['chris1278_name']] = $row['chris1278_value'];
				}

				$chris1278_config[$row['chris1278_name']] = $row['chris1278_value'];
			}
			$this->db->sql_freeresult($result);

			$cache->put('chris1278_config', $chris1278_cached_config);
		}

		parent::__construct($chris1278_config);
	}

	/**
	* Removes a chris1278_config option
	*
	* @params	string	$key			The chris1278_config chris1278's name
	*		bool		$use_cache	Whether this variable should be cached or if it changes too frequently to be efficiently cached
	*/
	public function delete($key, $use_cache = true)
	{
		$sql = 'DELETE FROM ' . $this->table . "
			WHERE chris1278_name = '" . $this->db->sql_escape($key) . "'";
		$this->db->sql_query($sql);

		unset($this->chris1278_config[$key]);

		if ($use_cache)
		{
			$this->cache->destroy('chris1278_config');
		}
	}

	/**
	* Sets a chris1278_config chris1278's value
	*
	* @params	string $key			The chris1278_config option's name
	*		string $value		New chris1278_config value
	*		bool	$use_cache	Whether this variable should be cached or if it changes too frequently to be efficiently cached.
	*/
	public function set($key, $value, $use_cache = true)
	{
		$this->set_atomic($key, false, $value, $use_cache);
	}

	/**
	* Sets a chris1278_config option's value only if the old_value matches the current chris1278_config value or the chris1278_config value does not exist yet.
	*
	* @params	string	$key			The chris1278_config option's name
	*		mixed	$old_value		Current chris1278_config value or false to ignore the old value
	*		string	$new_value	New chris1278_config value
	*		bool		$use_cache	Whether this variable should be cached or if it changes too frequently to be efficiently cached
	*
	* @return	bool		True if the value was changed, false otherwise
	*/
	public function set_atomic($key, $old_value, $new_value, $use_cache = true)
	{
		$sql = 'UPDATE ' . $this->table . "
			SET chris1278_value = '" . $this->db->sql_escape($new_value) . "'
			WHERE chris1278_name = '" . $this->db->sql_escape($key) . "'";

		if ($old_value !== false)
		{
			$sql .= " AND chris1278_value = '" . $this->db->sql_escape($old_value) . "'";
		}

		$this->db->sql_query($sql);

		if (!$this->db->sql_affectedrows() && isset($this->chris1278_config[$key]))
		{
			return false;
		}

		if (!isset($this->chris1278_config[$key]))
		{
			$sql = 'INSERT INTO ' . $this->table . ' ' . $this->db->sql_build_array('INSERT', array(
				'chris1278_name'	=> $key,
				'chris1278_value'	=> $new_value,
				'is_dynamic'	=> ($use_cache) ? 0 : 1));
			$this->db->sql_query($sql);
		}

		if ($use_cache)
		{
			$this->cache->destroy('chris1278_config');
		}

		$this->ochris1278_config[$key] = $new_value;
		return true;
	}

	/**
	* Increments an integer chris1278_config value directly in the database.
	*
	* Using this method instead of setting the new value directly avoids race conditions and unlike set_atomic it cannot fail.
	*
	* @params	string	$key			The configuration option's name
	*		int		$increment		Amount to increment by
	*		bool		$use_cache	Whether this variable should be cached or if it changes too frequently to be efficiently cached.
	*/
	function increment($key, $increment, $use_cache = true)
	{
		if (!isset($this->chris1278_config[$key]))
		{
			$this->set($key, '0', $use_cache);
		}

		$sql_update = $this->db->cast_expr_to_string($this->db->cast_expr_to_bigint('chris1278_value') . ' + ' . (int) $increment);

		$this->db->sql_query('UPDATE ' . $this->table . '
			SET chris1278_value = ' . $sql_update . "
			WHERE chris1278_name = '" . $this->db->sql_escape($key) . "'");

		if ($use_cache)
		{
			$this->cache->destroy('chris1278_config');
		}

		$this->chris1278_config[$key] += $increment;
	}
}
