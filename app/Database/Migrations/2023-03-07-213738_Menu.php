<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
  public function up()
  {
    helper('migration');

    $menu_utama = [
      'id_menu_utama'     => ['type' => 'int', 'constraint' => 200, 'unsigned' => true, 'auto_increment'  => true],

      'uuid_menu'        => ['type' => 'varchar', 'constraint' => 300],
      'nama_menu'        => ['type' => 'varchar', 'constraint' => 300],
      'icon_menu'        => ['type' => 'longtext', 'constraint' => 300],
      'link_menu'        => ['type' => 'longtext', 'constraint' => 300],
      'urutan_menu'      => ['type' => 'int', 'constraint' => 300],
      'posisi'           => ['type' => 'enum', 'constraint' => ['navbar', 'sidebar']],
      'level_pengguna'   => ['type' => 'enum', 'constraint' => ['Y', 'N'], 'default'=> 'Y'],
      'level_admin'      => ['type' => 'enum', 'constraint' => ['Y', 'N'], 'default'=> 'Y'],
      'level_super_admin'=> ['type' => 'enum', 'constraint' => ['Y', 'N'], 'default'=> 'Y'],
      'aktif'            => ['type' => 'enum', 'constraint' => ['Y', 'N'], 'default'=> 'Y'],
    ];

    $this->forge
    ->addField($menu_utama)
    ->addPrimaryKey('id_menu_utama')
    ->addUniqueKey('uuid_menu')
    ->createTable('menu_utama');
  }

  public function down()
  {
    $tables = [
      'menu_utama',
      ''
    ];
  }
}