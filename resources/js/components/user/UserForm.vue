<template>
    <div style="width:70%; margin: 100px auto">
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span>ระบบลงทะเบียน</span>
            </div>
            <div>
                <el-form label-position="top" label-width="100px" :model="user">
                    <el-row :gutter="20">
                        <el-col :span="12">
                            <el-form-item label="ชื่อจริง">
                                <el-input v-model="user.fname" placeholder="Please type.."></el-input>
                            </el-form-item>
                        </el-col>
                        <el-col :span="12">
                            <el-form-item label="นามสกุล">
                                <el-input v-model="user.lname" placeholder="Please type.."></el-input>
                            </el-form-item>
                        </el-col>
                    </el-row>
                    <el-row :gutter="20">
                        <el-col :span="12">
                            <el-form-item label="รหัสนักศึกษา">
                                <el-input v-model="user.student_id" placeholder="Please type.."></el-input>
                            </el-form-item>
                        </el-col>
                          <el-col :span="12">
                            <el-form-item label="อีเมล">
                                <el-input v-model="user.email" placeholder="Please type.."></el-input>
                            </el-form-item>
                        </el-col>
                    </el-row>
                    <el-row :gutter="20">
                        <el-col :span="12">
                            <el-form-item label="พาสเวิร์ด">
                                <el-input type="password" v-model="user.pass" autocomplete="off"></el-input>
                            </el-form-item>
                        </el-col>
                    </el-row>
                     <el-row :gutter="20">
                        <el-col :span="12">
                            <el-form-item label="พาสเวิร์ด(2)">
                                <el-input type="password" v-model="user.checkPass" autocomplete="off"></el-input>
                            </el-form-item>
                        </el-col>
                    </el-row>
                    <el-row>
                        <center>
                            <el-button type="primary" round>Save</el-button>
                        </center>
                    </el-row>
                </el-form>
            </div>
        </el-card>
    </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        fname: "กิตติพงษ์",
        lname: "เล้าอรุณ",
        email: "kittipong@mfec.co.th",
        student_id: 57130500006
      },
      faculty: []
    };
  }
};
</script>
