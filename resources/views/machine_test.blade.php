<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        #header_container{
            border: 1px solid;
            background-color: rgb(3, 66, 3);
            color: white;
            height: 100px;
            text-align: center;
            padding: 20px;
            
           
        }
        #main_div{
            text-align: center;
            background-color: rgb(194, 245, 194);
            height: 650px;
            /* max-width: 800px;  */
           
        }
        #second_div{
            background-color: rgb(92, 196, 92);
            /* width: 800px; */
            text-align: center;
            max-width: 800px;
            margin: auto;
            height: 150px;
            border-radius: 20px;
            padding-top: 100px;
            
        }
        #input{
            height:20px;
        }
        #btn{
            text-align: center;
            width: 150px;
            height: 20px;
            border-radius: 5px;
            border: none;
            background-color: rgb(30, 79, 99);

        }

        #output_text{
            height: 80px;
            padding: 10px;
            margin: 10px;
           
        }
        #data_table{
          
           margin: auto;
           margin-top: 20px;
           width: 1000px;
           

        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
}
    </style>
</head>
<body>
    <!-- <header >
        <div id="header_container">
             <h1>To Do App</h1>

        </div>
        
    </header> -->
    <main>
        
        <div id="main_div" style="margin: 0!important;">
            <div id="header_container">
                <h1>To Do App</h1>
    
           </div>
            <h4>Welcome AnonymousUser!</h4>
            <div id="second_div">
                <input type="text" placeholder="Title" id="title">
                <textarea id="description" class="form-control" placeholder="Description"></textarea>
                <button onclick="display()" id="btn">save</button>
            </div>
            <table border="1" id="data_table">
                <tr>
                    <th>Title</th>
                    <th colspan="2">Description</th>
                </tr>
               
               
            </table>
            <br><br><hr>
            <p><b>Devaloped by:</b>Cybersquare</p>
        </div>
    </main>
    <script>
        var row_no=1
        var col_no=0;
        function display(){
           
            var title=document.getElementById('title').value 
            var description=document.getElementById('description').value
            var dlb=document.getElementById('delet');
            var tbl=document.getElementById('data_table')
            var row = tbl.insertRow(row_no)
            row.insertCell(0).innerHTML=title;
            row.insertCell(1).innerHTML=description;
            row.insertCell(2).innerHTML='<button onclick="remove_row('+ row_no +')">delete</button>'; 
           
           row_no++
           document.getElementById('title').value =""
           document.getElementById('description').value=""
          // tbl.append("<tr><td>"+title+"</td><td>"+description+"</td></tr>")
          //value="<tr><td>"+title+"</td><td>"+description+"</td></tr>"
           // tbl.append(value)

        }
        function remove_row(row_no){
            document.getElementById("data_table").deleteRow(row_no);
        }
    </script>
    
        
    
</body>
</html>