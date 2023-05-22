<hr class="hr hr-blurry">
<div class="footer">
    <p class="text-center"> © 2023 ifakara dioceses catholic church </p>
</div>
</div>





<script src="{{asset('style/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('style/admin/js/popper.js')}}"></script>
<script src="{{asset('style/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/admin/js/main.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>

</html>