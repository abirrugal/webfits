

// function Add_wishlist(id){
//     if(id){    
//     $.ajax({
//     type:'get',
//     dataType: 'json',
//     data :{
    
//       id:id
//     },
//     url: "{{asset('/')}}wishlist/create/"+id,
//     success:function(data){
      
//         const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     didOpen: (toast) => {
//     toast.addEventListener('mouseenter', Swal.stopTimer)
//     toast.addEventListener('mouseleave', Swal.resumeTimer)
//     }
//     })
    
//     if($.isEmptyObject(data.error)){
    
//     Toast.fire({
//     icon: 'success',
//     title: data.success,
//     });
    
    
    
//     }else{
    
//     Toast.fire({
//     icon: 'error',
//     title: data.error,
//     })
    
//     }
    
    
    
//     },
    
    
//     error:function(data){
    
//         const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     didOpen: (toast) => {
//     toast.addEventListener('mouseenter', Swal.stopTimer)
//     toast.addEventListener('mouseleave', Swal.resumeTimer)
//     }
//     })
    
    
//     Toast.fire({
//     icon: 'error',
//     title: "Please Login First.",
//     })
    
//     }
    
    
    
//     });
//             }else{
    
    
//             }
//             }

