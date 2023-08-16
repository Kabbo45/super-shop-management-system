<html>
<style>
    @import "https://unpkg.com/open-props";

    body {
        background-color: black;
    }

    h1 {
        font-family: "Poppins";
        font-size: 3em;
        color: white;
        background-image: linear-gradient(#00fdcf, #00fdcf);
        background-size: 100% 10px;
        background-repeat: no-repeat;
        background-position: 0% 100%;
        transition: background-size .7s, background-position .5s ease-in-out;
    }

    h1:hover {
        color: black;
        background-size: 100% 100%;
        background-position: 100% 0%;
        transition: background-position .7s, background-size .5s ease-in-out, color .7s;
        cursor: pointer;
    }

    button {
        border: solid 4px #00fdcf;
        border-radius: 10px;
        font-family: "Poppins";
        font-weight: var(--font-weight-6);
        font-size: var(--font-size-3);
        color: white;
        background: none;
        margin-right: 30px;
        padding: var(--size-3) var(--size-5);
    }

    a {
        text-decoration: none;
        color: white;
    }

    button:hover {
        background: #00fdcf;
        color: black;
        transition-duration: 0.5s;
        cursor: pointer;
    }

    h2 {
        color: white;
        font-size: 4vw;
        text-transform: uppercase;
        text-align: center;
        line-height: 1;
        font-family: "Poppins";
        padding-top: 80px;
        padding-bottom: 20px;
    }

    .buttons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fancy {
        position: relative;
        white-space: nowrap;

        &:after {
            --deco-height: 0.3125em;
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: calc(var(--deco-height) * -0.625);
            height: var(--deco-height);
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23a)'%3E%3Cpath d='M-17 30.5C-1 22 72-4 54 13 37.9 28.2-2.5 57.5 16 55.5s72-29 104-40' stroke='%2300FDCF' stroke-width='10'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='a'%3E%3Cpath fill='%23fff' d='M0 0h100v64H0z'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A");
            background-size: auto 100%;
            background-repeat: round;
            background-position: 0em;
        }
    }
</style>

<body>
    <center>
        <h1>
            <c href="index.php">Super Shop Management System</c>
        </h1>
    </center>
    <div>
        <h2><span class="fancy">Login</span></h2>
        <div class="buttons">
            <a href="admin/dlogin.php"><button>Admin Login</button></a>
            <a href="slogin.php"><button>Store Login</button></a>
            <a href="dist/dlogin.php"><button>Distributor Login</button></a>
        </div>
    </div>
</body>

</html>