<? echo view('Auth\_navbar'); ?>

<h1>Dashboard</h1>
<? 
    if ($logged_in) {
        echo $user->username;
    } 
?>