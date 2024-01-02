document.getElementById('shaurma').onclick = function () {
	document.getElementById('title-shaurma').scrollIntoView({ behavior: 'smooth' })
}
document.getElementById('pizza').onclick = function () {
	document.getElementById('title-pizza').scrollIntoView({ behavior: 'smooth' })
}
document.getElementById('rolls').onclick = function () {
	document.getElementById('title-roll').scrollIntoView({ behavior: 'smooth' })
}

document.getElementById('burger').onclick = function() {
	document.querySelector('header').classList.toggle('open')
}