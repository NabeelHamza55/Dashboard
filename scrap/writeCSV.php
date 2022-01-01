<?php
  $fileName = 'UserList.csv';

  $list = array('1' => 'Hello', '2' => 'Hello', '3' => 'Hello', '4' => 'Hello', '5' => 'Hello', '6' => 'Hello');

  $headers = array(
      "Content-type"        => "text/csv",
      "Content-Disposition" => "attachment; filename=$fileName",
      "Pragma"              => "no-cache",
      "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
      "Expires"             => "0"
  );

  $columns = array('User', 'Email', 'Hotel', 'Account Type', 'Status', 'Created At');
  $callback = function() use($list, $columns) {
      $file = fopen('php://output', 'w');
      fputcsv($file, $columns);

    //   foreach ($list as $item) {
    //       $row['User'] = $item['1'];
    //       $row['Email'] =$item['2'];
    //       $row['Hotel'] = $item->hotel;
    //       $row['Account Type'] = $item->role;
    //       $row['Status'] = $item->userStatus == '1' ? 'Active' : 'Deactive';
    //       $row['Created At'] = date('d-m-Y G:i', strtotime($item->created_at));

    //       fputcsv($file, $row);
    //   }
     fclose($file);
     stream($callback, 200, $headers);
  };

?>
