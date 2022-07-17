<?php
/**
 * Language Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    TollReason
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TollReason extends Model
{
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['reason','status'];

    /**
     * Scope to get Active records Only
     *
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'Active');
    }
}