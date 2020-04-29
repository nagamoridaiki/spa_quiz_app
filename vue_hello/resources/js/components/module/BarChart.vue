<script>
import { Bar } from "vue-chartjs";
export default {
  extends: Bar,
  mounted() {
    this.renderChart(
      {
        labels: ["タ・ナカ", "Suzuki", "Saito", "Moriyama", "アオキ", "村町"],
        datasets: [
          {
            label: "最高得点率",
            backgroundColor: "rgba(0, 170, 248, 0.47)",
            data: [100, 90, 80, 70, 60, 50]
          }
        ]
      },
      {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
                min: 0,
                max: 100
              }
            }
          ]
        }
      }
    );
  }
};
</script>