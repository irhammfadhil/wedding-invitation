<?php

namespace App\Services;

use App\Repositories\InvitationRepository;

class InvitationService extends Service
{
    public function __construct(InvitationRepository $repository)
    {
        parent::__construct($repository);
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
}
