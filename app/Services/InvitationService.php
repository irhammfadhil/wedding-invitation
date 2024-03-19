<?php

namespace App\Services;

use App\Repositories\InvitationRepository;

class InvitationService extends Service
{
    public function __construct(InvitationRepository $repository)
    {
        parent::__construct($repository);
    }
    public function get_invitation_by_sent_status($status) {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['where', 'is_sent', '=', $status],
        ];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function ged_akad_guests() {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['where', 'invitation_type', '=', 'Akad'],
        ];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function get_akad_guests_id() {
        $fields = [
            'id'
        ];
        $joins = [];
        $conditions = [
            ['where', 'invitation_type', '=', 'Akad'],
        ];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function get_all_guests_id() {
        $fields = [
            'id'
        ];
        $joins = [];
        $conditions = [];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function get_invitation_by_name($name) {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['where', 'name', '=', $name],
        ];
        $order_by = [];
        $group_by = [];
        return $this->first($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function getInvitationByNameAndAddress($name, $address) {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['where', 'name', 'like', '%'.$name.'%'],
            ['orWhere', 'address', 'like', '%'.$address.'%'],
        ];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
    public function get_unconfirmed_guest_id($ids) {
        $fields = [
            '*'
        ];
        $joins = [];
        $conditions = [
            ['whereNotIn', 'id', $ids],
        ];
        $order_by = [];
        $group_by = [];
        return $this->get($fields, $joins, $conditions, $order_by, false, $group_by);
    }
}
