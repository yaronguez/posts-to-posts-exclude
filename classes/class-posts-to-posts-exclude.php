<?php
class Posts_To_Posts_Exclude {
	/**
	 * Load the hooks
	 */
	public function run(){
		add_filter('posts_clauses', array($this, 'exclude_children'), 30, 2);
		add_filter('posts_clauses', array($this, 'exclude_parents'), 30, 2);
	}

	/**
	 * Exclude posts that are children of a specific link type from a WP Query
	 *
	 * @param $clauses array
	 * @param $wp_query WP_Query
	 *
	 * @return array
	 */
	public function exclude_children($clauses, $wp_query){
		if(!isset($wp_query->query_vars['exclude_children'])){
			return $clauses;
		}

		$link_type = $wp_query->query_vars['exclude_children'];
		global $wpdb;
		//$clauses['fields'] .= ", $wpdb->p2p.*";
		$clauses['join'] .= $wpdb->prepare(" LEFT JOIN $wpdb->p2p ON ($wpdb->posts.ID = $wpdb->p2p.p2p_to AND $wpdb->p2p.p2p_type = %s) ", $link_type);
		$clauses['where'] .=  " AND ($wpdb->p2p.p2p_id IS NULL)";

		return $clauses;
	}

	/**
	 * Exclude posts that are parents of a specific link type from a WP Query
	 *
	 * @param $clauses array
	 * @param $wp_query WP_Query
	 *
	 * @return array
	 */
	public function exclude_parents($clauses, $wp_query){
		if(!isset($wp_query->query_vars['exclude_parents'])){
			return $clauses;
		}

		$link_type = $wp_query->query_vars['exclude_parents'];
		global $wpdb;
		//$clauses['fields'] .= ", $wpdb->p2p.*";
		$clauses['join'] .= $wpdb->prepare(" LEFT JOIN $wpdb->p2p ON ($wpdb->posts.ID = $wpdb->p2p.p2p_from AND $wpdb->p2p.p2p_type = %s) ", $link_type);
		$clauses['where'] .=  " AND ($wpdb->p2p.p2p_id IS NULL)";

		return $clauses;
	}
}