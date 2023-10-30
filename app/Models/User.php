<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace App\Models;
=======

namespace App\Models;

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

namespace App\Models;

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

namespace App\Models;

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];
    protected $guarded = ['id'];
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======

>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
}
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
}
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
