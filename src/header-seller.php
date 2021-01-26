<header>
    <a href="index.php">La Brioche Dorée</a>
    <a href="resum.php" class="resum">Résumé des ventes</a>
</header>


<style>
*{
    box-sizing: border-box;
}

header
{
    background: url(../img/bc.jpg) no-repeat center center fixed;
    background-size: cover;
    z-index: 99;
    width: 100%;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 150px;
    font-family: courgette;
    color: #fff;
    font-size: 32px;
    position: fixed;
    top: 0;
    left: 0;
}
header a
{
    text-decoration: none;
    color: #fff;
}
header a.resum
{
    padding: 10px 20px;
    border: 1px solid #fff;
    font-size: 13px;
    border-radius: 15px;
    cursor: pointer;
}
header a.resum:hover
{
    background-color: red;
    border-color: red;
}
</style>