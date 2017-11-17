 <div class="container">
    <div class="row">
        <div class="col-md-12 title-user-list">
             <h1 class="pull-left">Platform users</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">First Name</th>
                        <th class="col-md-2">Surname</th>
                        <th class="col-md-2">Username</th>
                        <th class="col-md-2">Email</th>
                        <th class="col-md-2">Current Country</th>
                        <th class="col-md-2">Current City</th>
                        <th class="col-md-2">Country Origin</th>
                        <th class="col-md-2">
                            <a href="<?php echo url::to('addnew'); ?>" class="btn btn-primary">Create new user</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user) : ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->first_name; ?></td>
                            <td><?php echo $user->last_name; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php $current_country = Country_Model::retrieveByID($user->country_current_id); echo $current_country->name ?></td>
                            <td><?php echo $user->current_city; ?></td>
                            <td><?php $origin_country = Country_Model::retrieveByID($user->country_origin_id); echo $current_country->name ?></td>
                            <td>
                                <form style="display:inline" method="post" action="<?php echo url::to('edit'); ?>">
                                <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                                <button type="submit" class="btn btn-warning">Edit</a>
                                </form>
                            </td>
                            <td>
                                <form style="display:inline" class="remove-form" action="" method="post">
                                    <input type="hidden" name="_method" value="<?php echo $user->id; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
        </div>
    </div>
</div>



<style type="text/css">
    
.title-user-list {
    text-align: center;
    font-family: 'Raleway', cursive;
    color: white;
    margin-top: 3%;
    margin-bottom: 5%;
}

.title-user-list p {
    font-family: 'Raleway', sans-serif;
    margin-top: 3%;
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    font-size: 1rem;
}

.title-user-list span {
    color: #D9534F;
}

.title-user-list span {
    color: #D9534F;
}

body {
    background-color: #505050;
}

</style>
