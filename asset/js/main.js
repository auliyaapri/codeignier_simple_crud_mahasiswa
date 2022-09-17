// const activePage = window.location.pathname;
// const navLinks = document.querySelectorAll('nav a').
// forEach(Link => {
//     if(Link.href.includes(`${activePage}`)) {
//         Link.classList.add('active');
//     }
// })

const flashData = $('.flash-data').data('flashdata'); // dapet dari view index.php classnya 
if (flashData) {
	Swal.fire(  
		'Data Berhasil ' + flashData,
		'',
		'success'
	);
};
console.log('uihuihuhuh');