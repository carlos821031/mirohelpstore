<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TypeMovementEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class movement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date_mov', 
        'daytime', 
        'type_mov', 
        'product_id', 
        'location_id', 
        'employee_id', 
        'quantity_mov', 
        'user_id', 
        'stock_before',
        'stock_warehouse',
        'stock_out',
        'stock_total',         
        'price', 
        'price_total_mov', 
        'sales', 
        'sales_total_mov', 
        'profits_total_mov', 
        'description'
    ];

    protected $casts = [
        'type_mov' => TypeMovementEnum::class
    ];

    /** Relacion de M - 1 */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /** Relacion de M - 1 */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    /** Relacion de M - 1 */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    /** Relacion de M - 1 */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
