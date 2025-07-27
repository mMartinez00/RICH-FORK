<?php $__env->startSection('content'); ?>
<!-- Header Carousel -->
<div class="carousel slide" id="myCarousel">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/cropped-image7-11.jpg" style="width:100%" class="img-responsive img-center">
        </div>

        <div class="item">
            <img src="<?php echo e(asset('images/cropped-image7-11.jpg')); ?>" style="width:100%" class="img-responsive img-center">
        </div>


        <!-- <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div> -->
    </div>

    <!-- Controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a> -->
</div>

<!-- <div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-6">
            <h2 class="page-header">Our Mission</h2>
            <p>Reach Into Cultural Heights is a collaborative effort focusing on changing attitudes and learning behaviors among urban youth by engaging them using innovative communications technology.
            </p>
        </div>

        <div class="col-md-6 mission">
            <img src="images/kids3.png" style="width:100%" class="img-responsive img-center">
        </div>
    </div>
</div>

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-6">
            <h2 class="page-header">Our Goals</h2>
            <p>RICH Goal: To guide students to become caring and to create healthy learning environments in school and beyond using the RICH “Reach for Success” Program 4 Guiding Principles: (1) I matter (2) I am responsible for my behavior (3) I am considerate of classmates and others, and (4) I use thinking strategies for school success.
            </p>

            <p>What we achieve: RICH program graduates coach RICH students in mastery of the Reach for Success program principles. This is accomplished by engaging youth in classroom settings and by using technology to reinforce communication skills.It is a blended approach; and our commitment is to prepare students to display new attitudes about their abilities to set realistic academic goals and adhere to respectable social standards.</p>

            <p>Outcomes Description:  Reach for Success students will demonstrate improvement in social emotional development skills supported by their improved academic performance and behavior indicated by report card grades/ teacher and / parent comments.</p>

            <p>Activities: Reach for Success students activities express new attitudes for school success as recorded in student weekly reflective writing portfolios, speaking and listening expressions, understanding the role of body language, respecting dress codes, and positively interacting with elders.  Weekly activities incorporate the value of self-esteem, the importance of taking responsibility of one’s behavior, and becoming accountability of one’s behavior.  RICHonline activities are designed to encourage students to become better writers,  communicate self-respect and respect for others.</p>

        </div>

        <div class="col-md-6">
        </div>
    </div>
</div>

<div class="container">
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p class="small">Donations to the Reach Into Cultural Heights, a tax-exempt organization under Section 501 (c)(3) of the Internal Revenue Code, are deductible for computing income and estate taxes. To ensure receipt of your tax-credit, please make sure that all packages are clearly marked with your name and address and enclose a list of the items with their estimated values. You will receive a receipt for your contribution.</p>
                <p class="small">Your tax-deductible gift in whatever amount you choose – will help provide emergency and other essential services.</p>
            </div>
            <div class="col-md-4">
                <div id="paypalBtn" style="text-align: center;">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick"><br>
                        <input type="hidden" name="hosted_button_id" value="GQ8JVMEKMGUZN"><br>
                        <input type="image" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"><br>
                        <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" border="0">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>