<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <el-row>
                    <el-col :span="12">
                        <span style=" font-size: 26px;">รายชื่อสมาชิก</span>
                    </el-col>
                    <el-col :span="12">
                        <div style="float:right">
                            <a href="/user/create">
                                <el-button type="primary" round>เพิ่ม</el-button>
                            </a>
                        </div>
                    </el-col>
                </el-row>
            </div>
            <div>
                <el-table :data="users" stripe height="500" style="width: 100%" :default-sort="{prop: 'user_id', order: 'ascending'}">
                    <el-table-column prop="user_id" label="#" width="90px" sortable></el-table-column>
                    <el-table-column prop="user_fname" label="ชื่อจริง"></el-table-column>
                    <el-table-column prop="user_lname" label="นามสกุล"></el-table-column>
                    <el-table-column prop="user_email" label="อีเมล"></el-table-column>
                    <el-table-column prop="created_at" label="สร้างเมื่อ"></el-table-column>
                    <el-table-column prop="updated_at" label="อัพเดทล่าสุดเมื่อ"></el-table-column>
                    <el-table-column fixed="right" label="การจัดการ" width="120">
                        <template slot-scope="scope">
                            <i class="el-icon-view action-icon" @click="onViewClick(scope.row.user_id)"></i>
                            <i class="el-icon-edit action-icon" @click="onEditClick(scope.row.user_id)"></i>
                            <i class="el-icon-delete action-icon delete" @click="onDeleteClick(scope.row.user_id)"></i>
                        </template>
                    </el-table-column>
                </el-table>
            </div>
        </el-card>
    </div>
</template>
<script>
export default {
  mounted() {
    this.getUser();
  },
  data() {
    return {
      users: []
    };
  },
  methods: {
    onViewClick(id) {
      window.location.href = "/user/" + id + "/view";
    },
    onEditClick(id) {
      window.location.href = "/user/" + id + "/edit";
    },
    onDeleteClick(id) {
      this.$prompt('กรุณาพิม "DELETE" เพื่อยืนยันที่จะลบ', "Delete", {
        confirmButtonText: "ยืนยัน",
        cancelButtonText: "ยกเลิก"
      }).then(({ value }) => {
        if (value === "DELETE" || value === "delete") {
          axios
            .delete("/api/user/" + id)
            .then(res => {
              this.$message({
                type: "success",
                message: "ลบสำเร็จเรียบร้อย"
              });
            })
            .catch(ex => {
              this.$message.error(ex);
            });
        }
        return;
      });
    },
    getUser() {
      axios.get("/api/user").then(res => {
        this.users = res.data;
      });
    }
  }
};
</script>
