<?php

namespace app\index\model;

use DB\Attributes\Table;
use DB\Model;
use DB\Attributes\PrimaryKey;
use DB\Attributes\AutoIncrement;
use DB\Attributes\Column;
/**
 * more example:
 * #[Table(name: 'user')]
 * #[Table(name:'user' , connection :'default' )]
 * #[Table(name:'user' , alias:'user', connection :'default' )]
 */
 
#[Table( name: 'user')]
class User extends Model {
    
    #[PrimaryKey]
    #[AutoIncrement]
    #[Column( name: 'id')]
    protected int $id;
    
}
