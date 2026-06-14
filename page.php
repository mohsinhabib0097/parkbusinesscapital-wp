<?php
get_header();
?>

<style>

/* Form Container */
form {
    max-width: 700px;
    margin: 40px auto;
}

/* Labels */
form label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 14px;
}

/* Inputs */
form input,
form textarea,
form select {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 15px;
    margin-bottom: 18px;
    transition: all 0.2s ease;
    box-sizing: border-box;
}

/* Focus Effect */
form input:focus,
form textarea:focus,
form select:focus {
    border-color: #0073aa;
    outline: none;
    box-shadow: 0 0 0 2px rgba(0,115,170,0.15);
}

/* Textarea */
form textarea {
    min-height: 120px;
    resize: vertical;
}

/* Submit Button */
form button,
form input[type="submit"] {
    background: #0073aa;
    color: #fff;
    border: none;
    padding: 12px 26px;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
    transition: background 0.2s ease;
}

/* Hover */
form button:hover,
form input[type="submit"]:hover {
    background: #005f8d;
}
.page-container{
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
}

.page-card{
    background:#fff;
    padding:40px;
    border-radius:8px;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
}

.page-title{
    font-size:32px;
    margin-bottom:20px;
}

.page-content{
    line-height:1.7;
    font-size:16px;
}
</style>

<div class="page-container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="page-card">

    <h1 class="page-title"><?php the_title(); ?></h1>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

</div>

<?php endwhile; endif; ?>

</div>

<?php
get_footer();
?>