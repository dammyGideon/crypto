<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipn extends Model
{
    use HasFactory;

    public $fillable = [
        'ipn_version', 'ipn_id', 'ipn_mode', 'merchant', 'ipn_type', 'txn_id', 'status', 'ref_id',
        'status_text', 'currency1', 'currency2', 'amount1', 'amount2', 'fee', 'buyer_name',
        'item_name', 'item_number', 'invoice', 'custom', 'send_tx', 'received_amount', 'received_confirms',
        'address', 'amount', 'amounti', 'currency', 'feei', 'dest_tag', 'confirms',
    ];

    public function isComplete ()
    {
        // If $order_status is >100 or is 2, return true
        return $this->status >= 100 || $this->status == 2;
    }

    public function isWithdrawal ()
    {
        return $this->ipn_type === 'withdrawal';
    }

    public function isApi ()
    {
        return $this->ipn_type === 'api';
    }

    public function isSimpleButton ()
    {
        return $this->ipn_type === 'simple';
    }

    public function isAdvancedButton ()
    {
        return $this->ipn_type === 'button';
    }
}
