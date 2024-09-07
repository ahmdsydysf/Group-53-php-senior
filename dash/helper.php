<?php 

  function setConnection($schema , $host = 'localhost' , $un = 'root' , $pw = '' , $port = 3306) {
    $connect =  mysqli_connect($host , $un , $pw , $schema , $port);
    return $connect;
  }

  // select * from table 

  function selectData($statment , $schema){
    $connection = setConnection($schema);
    $query = mysqli_query($connection , $statment);
    $countOfData = mysqli_num_rows($query);
    $selectErrors = mysqli_error($connection);

    return $r = [
      'data' => $query,
      'count' => $countOfData,
      'error' => $selectErrors,
    ];

  }

  function insertData($statment , $schema){
    $connection = setConnection($schema);
    mysqli_query($connection , $statment);
    $lastId = mysqli_insert_id($connection);
    $selectErrors = mysqli_error($connection);
    return $r = [
      'ID' => $lastId,
      'error' => $selectErrors
    ];
  }

  function deleteData($statment , $schema){
    $connection = setConnection($schema);
    mysqli_query($connection , $statment);
    $selectErrors = mysqli_error($connection);
    $affectedRows = mysqli_affected_rows($connection);
    return $r = [
      'count' => $affectedRows,
      'error' => $selectErrors
    ];
  }
  function updateData($statment , $schema){
    $connection = setConnection($schema);
    mysqli_query($connection , $statment);
    $selectErrors = mysqli_error($connection);
    $affectedRows = mysqli_affected_rows($connection);
    return $r = [
      'count' => $affectedRows,
      'error' => $selectErrors
    ];
  }

  function uploadFile($file , $allowed_ext , $size = 2097125){
    $all_errors = [];
    $flag = 0;
    if($file['error'] != 4){
      $f_name = uniqid() . $file['name'];
      $f_expload = explode('.' , $f_name);
      $f_end = end($f_expload);
      $f_ext = strtolower($f_end);
      $f_size = $file['size'];
      $f_tmp = $file['tmp_name'];

      if(!in_array($f_ext , $allowed_ext)){
        $all_errors['ext'] = 'u can not upload file of this type =' . $f_ext ;
      }else{
        $flag++;
      }
      if($f_size >= $size){
        $all_errors['siz'] = 'u can not upload file with this size max is  =' . $size ;
      }else{
        $flag++;
      }

      if($flag == 2){
        move_uploaded_file($f_tmp , 'uploads/' . $f_name);
      }

    }else{
      $all_errors['file'] = 'plz upload file';
    }

    if(! empty($all_errors)){

        return $all_errors;

    }else{
      return $f_name ;
    }
  }
?>