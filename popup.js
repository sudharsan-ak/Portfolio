window.onload = function()
{
	document.getElementById('login').addEventListener('click',
	function(){
		document.querySelector('.bg-modal').style.display = 'flex';
	}
	);
	document.querySelector('.close').addEventListener('click',
	function(){
		document.querySelector('.bg-modal').style.display = 'none';
	}
	);
}