$(document).ready(function()
{
	$('.addtocart').on('click',function()
	{
		var id=$(this).data('id');
		var name=$(this).data('name');
		var price=$(this).data('price');
		var photo=$(this).data('photo');
		var qty=1;

		var cart=localStorage.getItem('cart');
		if(!cart)
		{
			var cart='{"mycart":[]}';
		}

		cart=JSON.parse(cart);
		var mycart=cart.mycart;

		length=mycart.length;

		// increase id when id will same
		for(var i=0;i<length;i++)
		{
			if(id==mycart[i].id)
			{
				var exist=1;
				mycart[i].qty+=1;
			}
			
		}
		var mylist={id:id,name:name,price:price,photo:photo,qty:qty};
		if(!exist)
		{
			cart.mycart.push(mylist);
		}
		cart=JSON.stringify(cart);
		localStorage.setItem('cart',cart);
	});


	function cartnoti()
	{
		var cart=localStorage.getItem('cart');
		if(cart)
		{
			var cartobj=JSON.parse(cart);
			noti=cartobj.mycart.length;
			$('.badge-notify').html(noti);
		}
	}


	$('#shoppingcart_tfoot').on('click','.orderbtn',function()
	{
		var cart=localStorage.getItem('cart');
		var cartobj=JSON.parse(cart);
		var cartarr=cartobj.mycart;
		$.post('storeorder.php',{cart : cartarr},function(response){
			
		})
	})
})