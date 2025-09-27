 <!-- [ Sidebar Menu ] start -->
 <nav class="pc-sidebar">
   <div class="navbar-wrapper">
     <div class="m-header flex items-center py-4 px-6 h-header-height">
       <a href="../member/member_dashboard.php" class="b-brand flex items-center gap-3">
         <img src="../assets/images/*.png" alt="logo here" /> <!-- logo images here -->
       </a>
     </div>
     <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
       <div class="shrink-0 flex items-center justify-left mb-5">&nbsp;&nbsp;&nbsp;&nbsp;
         <h5 class="text-left font-medium text-[15px] flex items-center gap-2">
           <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="w-10 rounded-full" />User1
         </h5>
       </div>
       <div class="grow ms-3 text-center mb-4">
       </div>
       <ul class="pc-navbar">
         <li class="pc-item pc-caption">
           <label>Navigation</label>
         </li>

         <li class="pc-item"> <!-- Dashboard menu -->
           <a href="../member/member_dashboard.php" class="pc-link">
             <span class="pc-micon"><i data-feather="home"></i></span>
             <span class="pc-mtext">Dashboard</span>
           </a>
         </li>

         <li class="pc-item"> <!-- Menu 01 -->
           <a href="../member/temp1_member.php" class="pc-link">
             <span class="pc-micon"><i data-feather="users"></i></span>
             <span class="pc-mtext">Workout Plans</span>
           </a>
         </li>

         <li class="pc-item pc-hasmenu"> <!-- Menu 02 -->
           <a href="../member/temp2_member.php" class="pc-link">
             <span class="pc-micon"> <i data-feather="airplay"></i></span><span class="pc-mtext">Schedule</span>
           </a>
         </li>

         <!-- Menu with sub menu -->
         <li class="pc-item pc-hasmenu">
           <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="clipboard"></i> </span><span
               class="pc-mtext">Menu 03</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
           <ul class="pc-submenu">
             <li class="pc-item"><a class="pc-link" href="../member/temp3_member.php">Membership</a></li>
             <li class="pc-item"><a class="pc-link" href="../member/temp4_member.php">Progress</a></li>
           </ul>
         </li>
         <!-- Menu with submenu end -->

         <!-- Others -->
         <li class="pc-item pc-caption">
           <label>Others</label><i data-feather="wrench"></i>
         </li>
         <li class="pc-item pc-hasmenu"> <!-- type-->
           <a href="../admin/file-upload.php" class="pc-link">
             <span class="pc-micon"> <i data-feather="upload-cloud"></i></span><span class="pc-mtext">Upload</span>
           </a>
         </li>
         <li class="pc-item pc-hasmenu"> <!-- type-->
           <a href="../admin/bc_typography.php" class="pc-link">
             <span class="pc-micon"> <i data-feather="type"></i></span><span class="pc-mtext">Typography</span>
           </a>
         </li>
         <li class="pc-item pc-hasmenu"> <!-- colors -->
           <a href="../admin/bc_color.php" class="pc-link">
             <span class="pc-micon"> <i data-feather="edit"></i></span><span class="pc-mtext">Colors</span>
           </a>
         </li>
         <li class="pc-item pc-hasmenu"> <!-- icons -->
           <a href="../admin/icon-feather.php" class="pc-link">
             <span class="pc-micon"> <i data-feather="feather"></i></span><span class="pc-mtext">Icons</span>
           </a>
         </li>

         <!-- Settings -->
         <li class="pc-item pc-caption">
           <label>Settings</label><i data-feather="wrench"></i>
         </li>
         <li class="pc-item pc-hasmenu">
           <a href="#" class="pc-link" onclick="return alert('About this System\n\nSystem Name: Template\nDeveloper: (Student Name)\nContact No. (Contact No.)\nEMail: (email)\n\nCopyright © 2025 Software Solutions.\nAll rights reserved.');">
             <span class="pc-micon"><i class="ti ti-headset"></i></i></span><span class="pc-mtext">About</span>
           </a>
         </li>
         <li class="pc-item pc-hasmenu">
           <!--<a href="logout.php" class="pc-link" onclick="return confirm('Do you really want to Log-Out?')"> -->
           <a href="member_logout.php" class="pc-link">
             <span class="pc-micon"> <i data-feather="log-out"></i></span><span class="pc-mtext">Log-Out</span>
           </a>
         </li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- [ Sidebar Menu ] end -->