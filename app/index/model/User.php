<?php

namespace app\index\model;
use  DB\Attributes\Table;
use DB\Model;
 
/**
 * more example
 * #[Table(name:'user' , connection :'default' )]
 * #[Table(name:'user' , alias:'user', connection :'default' )]
 */


#[Table(name:'user'   )]
class User extends  Model{
     //pendding :primary key
}
