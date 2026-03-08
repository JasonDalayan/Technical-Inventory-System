<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap');
	body{
		margin: 0;
		padding: 0;
		font-family: 'poppins', sans-serif;
		background-color: #8e9091;
	}
	.center{
		position: absolute;
		top: 40%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 400px;
		background: white;
		border-radius: 10px;
	}
	.center h1{
		text-align: center;
		padding: 0 0 20px 0;
		border-bottom: 1px solid silver;
	}
	.center	 form{
		padding: 0 40px;
		box-sizing: border-box;
	}
	form .txt_field{
		position: relative;
		border-bottom: 2px solid #adadad;
		margin: 30px 0;
	}
	.txt_field input{
		width: 100%;
		padding: 0 5px;
		height: 40px;
		font-size: 16px;
		border:	none;
		background: none;
		outline: none;
	}
	.txt_field label{
		position: absolute;
		top: 50%;
		left: 5px;
		color: #adadad;
		transform: translateY(-50%);
		font-size: 16px;
		pointer-events: none;
		transition: .5s;
	}
	.txt_field span::before{
		content: '';
		position: absolute;
		top: 40px;
		left: 0;
		width: 0%;
		height: 2px;
		background: #2691d9;
		transition: .5s;
	}
	.txt_field input:focus ~ label, .txt_field input:valid ~ label{
		top: -5px;
		color: #b52b2b;
	}
	.txt_field input:focus ~ span::before, .txt_field input:valid ~ span::before {
		width: 100%;
	}
	input[type="submit"]{
		width: 100%;
		height: 50px;
		border: 1px solid;
		background: #b52b2b;
		border-radius: 25px;
		font-size: 18px;
		color: #e9f4fb;
		font-weight: 700;
		cursor: pointer;
		outline: none;
	}
	input[type="submit"]:hover{
		border-color: #b52b2b;
		transition: .5s;
	}

	/******* loader  ********/

	.body{
        margin: 0;
        padding: 310px 20px;
        display: flex;
        flex-direction: column;
        justify-content:  center;
        align-items: center;
    }
.loader{
      --sizeLoader: 100px;
      --sizeLoaderHalf: calc(var(--sizeLoader) / 2);
      --stepBtf: calc(var(--sizeLoader) / 10);

      display: flex;
      position: relative;
      flex-direction: row;
      justify-content: center;
      align-items: center;

      width: var(--sizeLoader);
      height: var(--sizeLoader);
    }
.preloader:hover {
      cursor: progress;
    }


.logo {
    width: 100%;
    height: 100%;
    animation: spin 2.5s linear infinite;
}


@keyframes spin {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
.hidden {
    display: none;
}
</style>