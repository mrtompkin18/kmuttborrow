<template>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span style=" font-size: 26px;">แก้ไข</span>
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
                        <el-button type="primary" @click="onClickUpdate()">อัพเดต</el-button>
                    </center>
                </el-row>
            </el-form>
        </div>
    </el-card>
</template>

<script>
export default {
  mounted() {
    axios.get("/api/user/" + this.userid).then(res => {
      this.user = res.data;
    });
    console.log("edit initial..");
  },
  props: ["userid"],
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
    onClickUpdate() {
      axios.put("/api/user/" + this.userid, this.user).then(res => {
        window.location.href = "/user/list";
      });
    }
  }
};
</script>
