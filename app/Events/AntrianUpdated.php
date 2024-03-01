<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AntrianUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $antrian;
    public $kategoriAntrian;
    public $jenisAntrian;
    /**
     * Create a new event instance.
     */
    public function __construct($antrian, $kategoriAntrian, $jenisAntrian)
    {
        $this->antrian = $antrian;
        $this->kategoriAntrian = $kategoriAntrian;
        $this->jenisAntrian = $jenisAntrian;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        if($this->jenisAntrian === 'umum_dan_keuangan'){
            return new Channel('umum_dan_keuangan-channel');
        }
        else if ($this->jenisAntrian === 'hukum'){
            return new Channel('hukum-channel');
        }
        else if ($this->jenisAntrian === 'phi'){
            return new Channel('phi-channel');
        }
        else if ($this->jenisAntrian === 'tipikor'){
            return new Channel('tipikor-channel');
        }
        else if ($this->jenisAntrian === 'pidana'){
            return new Channel('pidana-channel');
        }
        else if ($this->jenisAntrian === 'perdata'){
            return new Channel('perdata-channel');
        }
    }

    /**
     * Broadcast antrian-updated data
     */
    public function broadcastAs()
    {
        return 'antrian-updated';
    }
}
