<footer class="main-footer bg-dark text-white pt-5 pb-3 mt-auto">
    <div class="container">
        <div class="row">
            <!-- Widget -->
            <?php if (is_active_sidebar('footer_widgets')) : ?>
                <?php dynamic_sidebar('footer_widgets'); ?>
            <?php endif; ?>

        </div>
    </div>
    <div class="copy bg-dark py-3 border-top">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="small m-0 text-white">Copyright &copy; <?php echo date('Y') ?>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- MODAL -->
<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="signUpModal">Sign Up To Get Started.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (is_active_sidebar('signup_form')) : ?>
                    <?php dynamic_sidebar('signup_form'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>