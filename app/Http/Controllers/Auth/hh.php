<?php

protected function create(array $data)
{
$user = User::create([
'first_name'    => $data['first_name'],
'last_name'     => $data['last_name'],
'email'         => $data['email'],
'phone'         => $data['phone'],
'bank_name'     => $data['bank_name'],
'acct_name'     => $data['acct_name'],
'acct_number'   => $data['acct_number'],
//'profile_pix'   => $data['profile_pix']->store('pictures'),
'sme'           => $data['sme'],
'other_sme'     => $data['other_sme'],
'password'      => bcrypt($data['password']),
]);

$user->levelonemodel()->create([
'upline_id' => null
]);

return $user;
}