<template>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span style=" font-size: 26px;">ระบบลงทะเบียน</span>
        </div>
        <div>
            <el-form label-position="top" label-width="100px" :model="user">
                <el-row :gutter="20">
                    <el-col :span="12">
                        <el-form-item label="ชื่อจริง">
                            <el-input v-model="user.user_fname" placeholder="Please type.."></el-input>
                        </el-form-item>
                    </el-col>
                    <el-col :span="12">
                        <el-form-item label="นามสกุล">
                            <el-input v-model="user.user_lname" placeholder="Please type.."></el-input>
                        </el-form-item>
                    </el-col>
                </el-row>
                <el-row :gutter="20">
                    <el-col :span="12">
                        <el-form-item label="รหัสนักศึกษา">
                            <el-input v-model="user.user_student_id" placeholder="Please type.."></el-input>
                        </el-form-item>
                    </el-col>
                    <el-col :span="12">
                        <el-form-item label="อีเมล">
                            <el-input v-model="user.user_email" placeholder="Please type.."></el-input>
                        </el-form-item>
                    </el-col>
                </el-row>
                <el-row :gutter="20">
                    <el-col :span="12">
                        <el-form-item label="พาสเวิร์ด">
                            <el-input type="password" v-model="user.user_password" autocomplete="off"></el-input>
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
                        <el-button type="primary" @click="add()">บันทึก</el-button>
                    </center>
                </el-row>
            </el-form>
        </div>
    </el-card>
</template>

<script>
export default {
  mounted() {},
  data() {
    return {
      user: {
        fname: "",
        lname: "",
        email: "",
        student_id: "",
        pass: "",
        checkPass: ""
      }
    };
  },
  methods: {
    add() {
      axios
        .post("/api/user", {
          ...this.user,
          role_id: 1,
          class_id: 1
        })
        .then(res => {
          window.location.href = "/user/list";
        });
    }
  }
};
</script>
