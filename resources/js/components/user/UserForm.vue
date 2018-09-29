<template>
    <div style="width:70%; margin: 100px auto">
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span>ระบบลงทะเบียน</span>
            </div>
            <div>
                <el-form label-position="right" label-width="100px" :model="user">
                    <el-form-item label="ชื่อจริง -นามสกุล">
                        <el-input v-model="user.fname" placeholder="Please type.."></el-input>
                        <el-input v-model="user.lname" placeholder="Please type.."></el-input>
                    </el-form-item>
                    <el-form-item label="รหัสนักศึกษา">
                        <el-input v-model="user.fname"></el-input>
                    </el-form-item>
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
        lname: "เล้าอรุณ"
      }
    };
  }
};
</script>
