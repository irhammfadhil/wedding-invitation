<?php

namespace App\Services;

use App\Repositories\RsvpRepository;

class RsvpService extends Service
{
    public function __construct(RsvpRepository $repository)
    {
        parent::__construct($repository);
    }
    public function get_rsvp_by_invitation_id($invitation_id) {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['where', 'invitation_id', '=', $invitation_id],
        ];
        $order_by = [];
        $group_by = [];
        return $this->first($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function get_attended_rsvp_by_invitation_id($invitation_id) {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['whereIn', 'invitation_id', $invitation_id],
            ['where', 'response', '=', 'Yes'],
        ];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function get_all_rsvps() {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [];
        $order_by = [['created_at', 'desc']];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
}
