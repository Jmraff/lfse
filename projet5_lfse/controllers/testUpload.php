Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore

@Jmraff
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


1
00aminyazdanpanah/handling-file-uploads
Code Issues 0 Pull requests 1 Actions Projects 0 Wiki Security Insights
handling-file-uploads/examples/upload_single_file.php
@aminyazdanpanah aminyazdanpanah release v1.0.13
254b35c on 23 Feb
71 lines (57 sloc) 2.2 KB

Code navigation is available!Beta
Navigate your code with ease. Click on function and method calls to jump to their definitions or references in the same repository. Learn more

Code navigation is still being calculated for this commit. Check back in a bit. Beta

Learn more or give us feedback
<?php
/**
 * Copyright 2019 Amin Yazdanpanah<http://www.aminyazdanpanah.com>.
 *
 * Licensed under the MIT License;
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://opensource.org/licenses/MIT
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
require_once '../vendor/autoload.php';

use AYazdanpanah\SaveUploadedFiles\File;
use AYazdanpanah\SaveUploadedFiles\Validator;
use Gumlet\ImageResize;

if (isset($_POST['submit'])) {
    $image_path = __DIR__ . "/images/user/123456";
    $export_image = function ($filename) use ($image_path) {
        //Add a  Validator: check if the file is image
        if (!is_type("image", $filename)) {
            throw new Exception("Your file is not an image!");
        }
        // Resize and crop your image
        mkdir($image_path . "/thumbnail", 0777, true);
        $image = new ImageResize($filename);
        $image->resizeToWidth(50)->save($image_path . "/thumbnail/thumb_50.jpg");
        return exif_read_data($filename);
    };
    $validator = new Validator();
    $validator = $validator->setMinSize(100)
        ->setMaxSize(1024 * 3)
        ->setType(['jpg', 'png', 'jpeg']);
    $upload = new File();
    $upload = $upload->file('upload_image')
        ->setValidator($validator)
        ->setOverride(false)
        ->setSaveAs('my_image')
        ->save($image_path, $export_image);
    var_dump("<pre>", $upload, "</pre>");
}
?>

<!DOCTYPE html>
<html>

<body>
    ************************************************************************************************************************
    <form action="" method="post" enctype="multipart/form-data">
        Select an image: <input type="file" name="upload_image" id="upload_image"><br>
        <input type="submit" value="Upload" name="submit">
    </form>
    ************************************************************************************************************************

</body>

</html>
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About