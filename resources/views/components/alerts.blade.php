@if (session('status'))
<div class="   p-4 mt-2 shadow-inner rounded-md capitalize bg-blue-600 mx-12 text-white" id="alert">
    <strong> {{ session('status') }} </strong>

       <i class="fa fa-times dark:text-dark" id="alert-close"></i>
   </div>
@endif
<!---created-->
@if (session('created'))
<div class="   p-4 mt-2 shadow-inner rounded-md capitalize bg-yellow-600 mx-12 text-white" id="alert">
<strong> {{ session('created') }} </strong>

   <i class="fa fa-times dark:text-dark" id="alert-close"></i>
</div>
@endif
<!---- deleted--->
@if (session('deleted'))
<div class="   p-4 mt-2 shadow-inner rounded-md capitalize bg-red-600 mx-12 text-white" id="alert">
<strong> {{ session('deleted') }} </strong>

   <i class="fa fa-times dark:text-dark" id="alert-close"></i>
</div>
@endif
<!---js code for alert--->
<script>

    document.getElementById('alert-close').addEventListener('click', () => {
    document.getElementById('alert').style.display = "none"
})
let alert= document.getElementById('alert')
setTimeout(() => {
 alert.style.display="none";
}, 3000);

</script>
