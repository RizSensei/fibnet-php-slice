<?php
include './_partials/_breadcrumb_header.php';
$parent_label = "Service";
$parent_label_href = "/fibnet/src/services.html";
$label = "ICT Solutions";
renderBreadcrumbHeaderSection($parent_label, $parent_label_href,  $label);
?>

<section class="w-full px-5 sm:px-10 lg:px-20 2xl:px-32 py-10">
  <div class="flex flex-col gap-10">
    <!-- ICT Services and Solutions: -->
    <div>
      <h1 class="pb-5 text-dark-blue border-bottom">
        ICT Services and Solutions:
      </h1>
      <ul class="pl-5 mt-5 text-gray-800 space-y-2">
        <li>
          Enterprise to Client Edge Solutions for Computer, and related
          Support and Installation.
        </li>
        <li>
          Computer Network, Internet, IP telephony Solutions and
          Installation, and IT Infrastructure Planning, Design and
          Support.
        </li>
        <li>Managed Services.</li>
        <li>Surveillance System Installation and Support.</li>
        <li>Application Installation and Support.</li>
      </ul>
    </div>

    <!-- Network (LAN/WLAN, WAN, and IoTs, LoRA) Setup, Design and Support: -->
    <div>
      <h1 class="pb-5 text-dark-blue border-bottom">
        Network (LAN/WLAN, WAN, and IoTs, LoRA) Setup, Design and Support:
      </h1>
      <ul class="pl-5 mt-5 text-gray-800 space-y-2">
        <li>
          Network (LAN/WLAN, WAN, and IoTs, LoRA) Setup, Design and
          Support:
        </li>
        <li>
          Maintenance and support services for any Cisco products, Aruba,
          HP, SonicWALL, Fortinet and other local brands like Netgear and
          others.
        </li>
        <li>Router, Switch, Firewall configuration.</li>
        <li>Video and Voice/IP telephony, IP PABX.</li>
        <li>Any wireless products configuration.</li>
        <li>LoRaWAN system support and IoTs.</li>
        <li>
          Setup Surveillance camera systems (DVR/NVR) and its network and
          connecting to Internet for remote watching.
        </li>
      </ul>
    </div>

    <!-- Computer IT related support includes:  For any Small Businesses to Enterprise. -->
    <div>
      <h1 class="pb-5 text-dark-blue border-bottom">
        Computer IT related support includes: For any Small Businesses to
        Enterprise.
      </h1>
      <ul class="mt-5 list-decimal pl-5 space-y-2">
        <li>
          Schedule Maintenance Monthly Tasks, Maintenance includes:
          <ul class="pl-5 mt-5 text-gray-800 space-y-2">
            <li>Review IT Help Desk Tickets</li>
            <li>Address users issues</li>
            <li>Perform Maintenance Checklist</li>
            <li>Microsoft and Mac application support</li>
            <li>Network Management and Support</li>
            <li>Security Updates, and Scans</li>
            <li>Review / organize equipment/inventories</li>
            <li>New System Setup and Migration</li>
            <li>Data Backup and Recovery</li>
            <li>
              Review Emergency Procedures; test and update documentation
              as needed
            </li>
          </ul>
        </li>
        <li>
          As per needed, Perform task In person service:
          <ul class="pl-5 mt-5 text-gray-800 space-y-2">
            <li>Review IT Help Desk Tickets</li>
            <li>Address call/users issues</li>
            <li>Update IT Help Desk Tickets</li>
          </ul>
        </li>
        <li>
          On Call service, Remote service:
          <ul class="pl-5 mt-5 text-gray-800 space-y-2">
            <li>Perform by Remote application tool:</li>
            <li>Review IT Help Desk Tickets</li>
            <li>Address call/users issues</li>
            <li>Update IT Help Desk Tickets</li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- What we can do besides IT services: -->
    <div>
      <h1 class="pb-5 text-dark-blue border-bottom">
        What we can do besides IT services:
      </h1>
      <ul class="list-disc pl-5 mt-5 text-gray-800 space-y-2">
        <li>
          Application Development, Expert on Custom Software, Web
          Applications, Mobile Applications.
        </li>
        <li>
          In-house software division for the Software (developed OSS/BSS
          system for CRM, Service provisioning, Customer service
          life-cycle management, Inventory Management, Fiber / FTTH
          Network Planning and Mobile App based Service Provisioning,
          Field Operations and Support, Customer self care portal as well
          as Customer App).
        </li>
        <li>Any required virtual/co-locates service.</li>
        <li>Any required cloud service Support and sales.</li>
        <li>Machine Learning Applications.</li>
        <li>IP Phone Systems and video systems Support and Sales.</li>
        <li>Surveillance Camera Systems Support and Sales.</li>
        <li>POS Systems Sales and Support.</li>
        <li>Control Systems Sales and Support.</li>
      </ul>
    </div>
  </div>


  <?php
  include './_partials/_other_services.php';
  echo renderServices();
  ?>
</section>