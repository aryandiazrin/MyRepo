<?php
    // Start session
    session_start();

    // Include and initialize DB class
    require_once 'DB.class.php';
    $db = new DB();

    // Fetch the users data
    $images = $db->getRows('images');

    // Get session data
    $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';

    // Get status message from session
    if(!empty($sessData['status']['msg'])){
        $statusMsg = $sessData['status']['msg'];
        $statusMsgType = $sessData['status']['type'];
        unset($_SESSION['sessData']['status']);
    }    
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-<?php echo $statusMsgType; ?>"><?php echo $statusMsg; ?></div>
    </div>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lombok Royal Property</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@0;1&family=Rubik&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </haead>

    <body id="LRP_Website" data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#LRP_Website">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="project.php">Projects</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="#">Budaya Kerja</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Container (test Section) -->
        <div class="row">
            <div class="col-md-12 head">
            <h5>Images</h5>
        <!-- Add link -->
            <div class="float-right">
                <a href="addEdit.php" class="btn btn-success"><i class="plus"></i> New Image</a>
            </div>
        </div>
    
        <!-- List the images -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th width="5%"></th>
                    <th width="12%">Image</th>
                    <th width="45%">Title</th>
                    <th width="17%">Created</th>
                    <th width="8%">Status</th>
                    <th width="13%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($images)){
                        foreach($images as $row){
                        $statusLink = ($row['status'] == 1)?'postAction.php?action_type=block&id='.$row['id']:'postAction.php?action_type=unblock&id='.$row['id'];
                        $statusTooltip = ($row['status'] == 1)?'Click to Inactive':'Click to Active';
                ?>
                <tr>
                    <td><?php echo '#'.$row['id']; ?></td>
                    <td><img src="<?php echo 'uploads/images/'.$row['file_name']; ?>" alt="" /></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                    <td><a href="<?php echo $statusLink; ?>" title="<?php echo $statusTooltip; ?>"><span class="badge <?php echo ($row['status'] == 1)?'badge-success':'badge-danger'; ?>"><?php echo ($row['status'] == 1)?'Active':'Inactive'; ?></span></a></td>
                    <td>
                        <a href="addEdit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">edit</a>
                        <a href="postAction.php?action_type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')?true:false;">delete</a>
                    </td>
                </tr>
                <?php } }else{ ?>
                    <tr><td colspan="6">No image(s) found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>