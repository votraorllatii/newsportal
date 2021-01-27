  <div class="col-md-4" style="margin-top: -24px;">

       
          <!-- Side Widget -->
          <div class="card my-4" style="border:none;">
            <h5 class="card-header" style="background-color:white;text-align:center; background-color:none;font-family: "B612 Mono", monospace;"B612 Mono", monospace;">Lajmet e fundit</h5>
            <div class="card-body">
                      <ul class="mb-0" style="list-style-type: decimal-leading-zero;color: #ccc;font-size:25px;line-height: 1;">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostingDate as postingdate from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

                    <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" style="color:black;font-size: 19px;"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
