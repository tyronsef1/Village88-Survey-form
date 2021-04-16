<?php $this->load->view('partials/header') ?>
    <h3>Thanks for submitting this form! You have submitted this form <?php echo $user_info['count_visit']; ?> times now.</h3>
    <h1>Submitted Information</h1>
    <p>Name: <?php echo $user_info['name']; ?></p>
    <p>Dojo Location: <?php echo $user_info['dojo_location']; ?></p>
    <p>Favorite Language: <?php echo $user_info['favorite_language']; ?></p>
    <p>Comment: <?php echo $user_info['comment']; ?></p>
    <a href='<?php echo ('/surveys') ?>'>Go Back</a>
<?php $this->load->view('partials/footer') ?>