    <?php
    use Illuminate\Database\Eloquent\Model as Eloquent;
    class User extends Eloquent
    {
        protected $fillable = ['name', 'email', 'password','userimage'];
        protected $hidden = ['password', 'remember_token',]; 
    }