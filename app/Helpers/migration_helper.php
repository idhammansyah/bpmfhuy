<?php

if (! function_exists('set_index')) {
    /**
     * Set indexing based on table and column name.
     *
     * @param \CodeIgniter\Database\ConnectionInterface &$db
     * @param string $table
     * @param string $attribute
     * @return BaseResult|bool|Query
     */
    function set_index(&$db, string $table, string $attribute)
    {
        return $db
        ->query("CREATE INDEX {$table}_{$attribute}_index ON {$table}({$attribute})");
    }
}

if (! function_exists('with_timestamps')) {
    /**
     * Set timestamp with the user id relation.
     *
     * @return array
     */
    function with_timestamps()
    {
        $attributes = [];

        $attributes = array_merge($attributes,
            timestamp('created_at'),
            timestamp('updated_at'),
            timestamp('deleted_at'),
            timestamp('restored_at'),

            primary_foreign_field('created_by'),
            primary_foreign_field('updated_by'),
            primary_foreign_field('deleted_by'),
            primary_foreign_field('restored_by'),
        );

        return $attributes;
    }
}

if (! function_exists('with_user_field_index')) {
    /**
     * Index the user field of timestamps.
     *
     * @param \CodeIgniter\Database\ConnectionInterface $db
     * @param string $table
     * @return BaseResult|bool|Query
     */
    function with_user_field_index(&$db, string $table)
    {
        $attributes = [
            'created_by',
            'updated_by',
            'deleted_by',
            'restored_by',
        ];

        foreach($attributes as $attr) {
            set_index($db, $table, $attr);
        }
    }
}

if (! function_exists('timestamp')) {
    /**
     * return the column model for timestamp.
     *
     * @param string $attribute
     * @return array
     */
    function timestamp(string $attribute): array
    {
        return [
            $attribute => [
                'type' => 'datetime',
                'null' => true,
            ],
        ];
    }
}

if (! function_exists('primary_foreign_field')) {
    /**
     * Generate the column for user relation.
     *
     * @param string $attribute
     * @return array
     */
    function primary_foreign_field(string $attribute, $nullable = true): array
    {
        return [
            $attribute => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => $nullable,
            ],
        ];
    }
}