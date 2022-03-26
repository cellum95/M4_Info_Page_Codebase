<?php
	header('Content-type: text/css; charset: UTF-8');
?>

:root {
	font-size: 16px;
	font-family: 'Open Sans';
	--text-primary: #ffc20e;
	-text-secondary: #FFFFFF;
	--bg-primary: #009900;
	--bg-secondary: #818181;
}

.header-title {
	background-color: var(--bg-primary);
	position: relative;
}

.header-title h1 {
	margin: 0;
	left: 3rem;
	padding: 1rem;
	color: var(--text-primary);
	text-align: center;
}

.nav-divider {
	background-color: var(--bg-secondary);
	position: relative;
}

.navbar {
	width: 200vh;
	position: relative;
}

.navbar a:hover {
	background-color: var(--bg-secondary);
}

.nav-item {
	color: #FFFFFF;
	display: flex;
	align-items: center;
	text-decoration: none;
}

.navbar-nav {
	list-style: none;
	padding: 2rem;
	margin: 0;
	display: flex;
	align-items: center;
}

.div-container{
	border-style: solid;
	display: flex;
}

.div-child{
	flex: 1;
	margin: 1rem;
}
