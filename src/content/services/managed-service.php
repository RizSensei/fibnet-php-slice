<?php
include './_partials/_breadcrumb_header.php';
$parent_label = "Service";
$parent_label_href = "/fibnet/src/services.html";
$label = "Managed Service";
renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label);
?>

<div class="w-full h-full py-10 px-5 sm:px-10 lg:px-20 2xl:px-32">
  <p class="text-base text-gray-800">
    We take responsibility for smooth operations of your IT services, equipment and skills need to help you run your business smoothly and freeing you to focus on your core business. <br><br>

    By outsourcing your IT needs like services, equipment and skills-requirement to us, you are free to focus on your core business strengths. We take care of your entire IT services need or part of it to free you with the hassles of IT operations. As an MSP (Managed Service Provider), we build upon our experience, skills and expertise on systems, network, cloud, security and IT operations to provide you with effective and efficient solutions.<br><br>
    ​
    As part of our service we can assume the responsibilities for your services, equipment, skills and operations under a service level agreement stating the scope of responsibilities, help desk, support needs and what kind of downtime and disaster recovery scopes are suitable for you. The range of business processes and functions that can benefit from our MSP offerings are tailored for each business and can be adjusted for your specific needs.
  </p>


  <?php
  include './_partials/_other_services.php';
  echo renderServices();
  ?>
</div>