<?php 
if (function_exists('setPostViews')) {
    setPostViews(get_the_ID());
}  
$post_type = get_post_type();
if($post_type === 'tin') {
    get_template_part('news/single', 'tin');
}
elseif($post_type === 'training') {
     get_template_part('training/single', 'training');
}
elseif($post_type === 'admissions') {
     get_template_part('Admission/single', 'admissions');
}
elseif($post_type === 'examine') {
     get_template_part('examine/single', 'examine');
}
elseif($post_type === 'center-department') {
     get_template_part('center-department/single', 'center-department');
}
elseif($post_type === 'support') {
     get_template_part('support/single', 'support');
}
elseif($post_type === 'student') {
     get_template_part('student/single', 'student');
}
elseif($post_type === 'alumni') {
     get_template_part('alumni/single', 'alumni');
}
elseif($post_type === 'workcalendar') {
     get_template_part('workcalendar/single', 'workcalendar');
}
elseif($post_type === 'video') {
     get_template_part('video/single', 'video');
}
elseif($post_type === 'anh') {
     get_template_part('picture/single', 'anh');
}
elseif($post_type === 'introduction') {
     get_template_part('introduction/single', 'introduction');
}
elseif($post_type === 'teamofofficials') {
     get_template_part('TeamofOfficials/single', 'teamofofficials');
}
?>
