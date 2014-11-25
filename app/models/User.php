<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = array('nome', 'email', 'telefone' ,'nomeDeUsuario', 'password', 'perfil', 'ativo');
    protected $guarded = array('id');

    public static $rule = array(
        'nome' => 'required|min:4|max:80|alpha',
        'email' => 'required|email|unique:users',
        'nomeDeUsuario' => 'required|min:3|max:20|unique:users',
        'password' => 'required|between:8,20|confirmed'
    );

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
